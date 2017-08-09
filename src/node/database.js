import Sequelize from 'sequelize'
import VenueModel from './models/Venue'
import ItemModel from './models/Item'
import SpaceModel from './models/Space'
import ProductModel from './models/Product'

const models = {}

async function init() {
  console.log('Initializing database...')

  const sequelize = new Sequelize({
    dialect: 'sqlite',
    storage: './sqliteNode.db'
  })


  models.Venue = VenueModel(sequelize)
  models.Item = ItemModel(sequelize)
  models.Product = ProductModel(sequelize)
  models.Space = SpaceModel(sequelize)

  models.Venue.hasMany(models.Item, {as: 'items'})
  models.Item.hasOne(models.Space)
  models.Item.hasOne(models.Product)

  return await Promise.all([
    models.Venue.sync(),
    models.Item.sync(),
    models.Space.sync(),
    models.Product.sync()
  ])
}

export default {
  init,
  models
}
