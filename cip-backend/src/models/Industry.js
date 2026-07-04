const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Industry = sequelize.define('Industry', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  heading: { type: DataTypes.STRING, allowNull: false },
  slug: { type: DataTypes.STRING, allowNull: true },
  detail: { type: DataTypes.TEXT, allowNull: true },
  image: { type: DataTypes.STRING, allowNull: true },
  icon: { type: DataTypes.STRING, allowNull: true },
}, {
  tableName: 'industries',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Industry;
