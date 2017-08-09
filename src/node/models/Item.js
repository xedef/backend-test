import DataTypes from 'sequelize'

export default function(sequelize) {
  const Item = sequelize.define('item', {
    name: {
      type: DataTypes.STRING
    }
  }, {
    underscored: true,
    timestamps: false
  })

  Item.prototype.getDetails = function() {
      const s = this.space
      const p = this.product

      return {
        id: this.id,
        name: this.name,
        space: s ? { id: s.id, hour_price: s.hour_price } : null,
        product: p ? { id: p.id, price: p.price } : null
      }
    }

  Item.prototype.delete = function() {
    return Promise.all([
      this.product ? this.product.destroy() : Promise.resolve(),
      this.space ? this.space.destroy() : Promise.resolve(),
    ]).then(() => this.destroy())
  }

  return Item
}
