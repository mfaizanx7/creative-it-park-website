const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Portfolio = sequelize.define('Portfolio', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  heading: { type: DataTypes.STRING, allowNull: true },
  image: { type: DataTypes.STRING, allowNull: true },
  type: { type: DataTypes.STRING, allowNull: true },
  link: { type: DataTypes.STRING, allowNull: true },
  description: { type: DataTypes.TEXT, allowNull: true },
}, {
  tableName: 'portfolios',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Portfolio;
