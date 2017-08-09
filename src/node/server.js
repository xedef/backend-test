import express from 'express'
import db from './database'
import bodyParser from 'body-parser'

async function init() {
  await db.init()

  const app = express()
  app.use(bodyParser.json())

  app.get('/venue(s)?', function(req, res) {
    db.models.Venue.findAll({include: ['items']}).then(r => {
      if (r === null) {
        if (r === null) {
          return res.sendStatus(200).send([])
        }
      }

      res.send(r.map(i => i.getWithItemNames()))
    })
  })

  app.get('/venue/:id', function(req, res) {
    db.models.Venue.findById(req.params.id, {
      include: [{
        association: 'items',
        include: ['product', 'space']
      }]
    }).then(r => {
      if (r === null) {
        return res.sendStatus(404)
      }
      res.send(r.getDetails())
    })
  })

  app.post('/venue', function(req, res) {
    db.models.Venue.create(req.body, {
      include: [{
        association: 'items',
        include: ['product', 'space']
      }]
    })
    .then(r => {
      res.status(201).send({data: r.getDetails()})
    })
  })

  // This update logic assumes that the related data is only being added
  // For deletion of the relations a new endpoint should be created
  // or this one to be defined to do so
  app.put('/venue/:id', function(req, res) {
    db.models.Venue.findById(req.params.id, {
      include: [{
        association: 'items',
        include: ['product', 'space']
      }]
    })
    .then(r => {
      const { name, items } = req.body

      r.set({name})
        .addItems(items)
        .then(() => r.save())
        .then(() => r.reload())
        .then(() => res.status(200).send(r.getDetails()))
    })
  })

  // delete a venue
  app.delete('/venue/:id', function(req, res) {
    db.models.Venue.findById(req.params.id, {
      include: [{
        association: 'items',
        include: ['product', 'space']
      }]
    })
    .then(r => {
      if (r === null) {
        return Promise.resolve({
          code: 404
        })
      }

      return r.deleteItems().then(() => {
        return r.destroy().then(() => Promise.resolve({code: 200, data: r.getDetails()}))
      })
    })
    .then(result => {
      res.status(result.code).send({data: result.data})
    })
  })

  await app.listen(3000)
}

init().then(() => {
  console.log('👂  Server listening on port 3000')
})
