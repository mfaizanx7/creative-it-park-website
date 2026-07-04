const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Testimonial = sequelize.define('Testimonial', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  name: { type: DataTypes.STRING, allowNull: false },
  detail: { type: DataTypes.STRING(2000), allowNull: true },
  subject: { type: DataTypes.STRING, allowNull: true },
  image: { type: DataTypes.STRING, allowNull: true },
}, {
  tableName: 'testimonials',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Testimonial;
