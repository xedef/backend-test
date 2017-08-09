import DataTypes from 'sequelize'

export default function(sequelize) {
  const Venue = sequelize.define('venue', {
    name: {
      type: DataTypes.STRING
    }
  }, {
    underscored: true,
    timestamps: false,
    setterMethods: {
      name: function(newName) {
        if (newName && newName !== this.name) {
          this.setDataValue('name', newName)
        }

        return this
      }
    }
  })

  Venue.prototype.deleteItems = function() {
    const items = this.items

    if(!Array.isArray(items) || items.length === 0) {
      return Promise.resolve(this)
    }

      return Promise.all(items.map(i => i.delete()))
  }

  Venue.prototype.getDetails = function() {
    const items = this.items || []

    return {
      bookingId: this.id,
      bookerName: this.name,
      items: items.map(i => i.getDetails())
    }
  }

  Venue.prototype.getWithItemNames = function() {
    const { id, name } = this
    const items = this.items || []

    return {
      id,
      name,
      items: items.map(i => i.name)
    }
  }

  Venue.prototype.addItems = function(items) {
    if(!Array.isArray(items) || items.length === 0) {
      return Promise.resolve(this)
    }

    return Promise.all(items.map(i => this.createItem(i, {include: ['product', 'space']})))
  }

  return Venue
}
