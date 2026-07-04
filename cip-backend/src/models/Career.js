const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Career = sequelize.define('Career', {
  id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
  first_name: { type: DataTypes.STRING, allowNull: false },
  last_name: { type: DataTypes.STRING, allowNull: false },
  email: { type: DataTypes.STRING, allowNull: false },
  phone: { type: DataTypes.STRING, allowNull: false },
  company: { type: DataTypes.STRING, allowNull: false },
  role: { type: DataTypes.STRING, allowNull: true },
  category: { type: DataTypes.STRING, allowNull: true },
  description: { type: DataTypes.STRING, allowNull: true },
  image: { type: DataTypes.STRING, allowNull: true },
  budget: { type: DataTypes.STRING, allowNull: true },
}, {
  tableName: 'careers',
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
});

module.exports = Career;
