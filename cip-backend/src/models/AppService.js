const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const AppService = sequelize.define('AppService', {
  id: {
    type: DataTypes.BIGINT.UNSIGNED,
    autoIncrement: true,
    primaryKey: true,
  },
  heading: {
    type: DataTypes.STRING,
    allowNull: false,
  },
  description: {
    type: DataTypes.STRING(1024),
    allowNull: true,
  },
  type: {
    type: DataTypes.STRING(225),
    allowNull: false,
  },
  icon: {
    type: DataTypes.STRING,
    allowNull: true,
  },
  sub_head: {
    type: DataTypes.STRING,
    allowNull: true,
  },
  link: {
    type: DataTypes.STRING(250),
    allowNull: true,
  }
}, {
  tableName: 'app_services',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = AppService;
