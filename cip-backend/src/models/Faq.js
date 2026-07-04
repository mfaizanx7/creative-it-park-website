const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Faq = sequelize.define('Faq', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  question: { type: DataTypes.STRING, allowNull: false },
  answer: { type: DataTypes.STRING(2000), allowNull: true },
}, {
  tableName: 'faqs',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Faq;
