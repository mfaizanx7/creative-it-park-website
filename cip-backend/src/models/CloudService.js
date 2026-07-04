const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const CloudService = sequelize.define('CloudService', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  heading: { type: DataTypes.STRING, allowNull: false },
  description: { type: DataTypes.STRING(1024), allowNull: true },
  type: { type: DataTypes.STRING, allowNull: false },
}, {
  tableName: 'cloud_services',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = CloudService;
