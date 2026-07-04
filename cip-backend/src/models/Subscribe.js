const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Subscribe = sequelize.define('Subscribe', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  email: { type: DataTypes.STRING, allowNull: false },
}, {
  tableName: 'subscribes',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Subscribe;
