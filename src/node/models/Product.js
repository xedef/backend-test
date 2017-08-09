import DataTypes from 'sequelize'

export default function(sequelize) {
  const Product = sequelize.define('product', {
    price: {
      type: DataTypes.DOUBLE
    }
  }, {
    underscored: true,
    timestamps: false
  })

  return Product
}
