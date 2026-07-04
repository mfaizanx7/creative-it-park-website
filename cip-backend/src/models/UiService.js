const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const UiService = sequelize.define('UiService', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  heading: { type: DataTypes.STRING, allowNull: false },
  description: { type: DataTypes.STRING(1024), allowNull: true },
  icon: { type: DataTypes.STRING, allowNull: true },
  type: { type: DataTypes.STRING, allowNull: false },
  sub_head: { type: DataTypes.STRING, allowNull: true },
}, {
  tableName: 'ui_services',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = UiService;
