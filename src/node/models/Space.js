import DataTypes from 'sequelize'

export default function(sequelize) {
  const Space = sequelize.define('space', {
    hour_price: {
      type: DataTypes.DOUBLE
    }
  }, {
    underscored: true,
    timestamps: false
  })

  return Space
}
