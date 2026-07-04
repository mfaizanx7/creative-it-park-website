const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Event = sequelize.define('Event', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  description: { type: DataTypes.STRING(5000), allowNull: true },
  picture: { type: DataTypes.STRING, allowNull: true },
}, {
  tableName: 'events',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Event;
