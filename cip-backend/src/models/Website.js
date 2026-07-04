const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/database');

const Website = sequelize.define('Website', {
    id: { type: DataTypes.BIGINT.UNSIGNED, autoIncrement: true, primaryKey: true },
    heading: { type: DataTypes.STRING, allowNull: true },
    discription: { type: DataTypes.TEXT, allowNull: true },
    icon: { type: DataTypes.STRING, allowNull: true },
    type: { type: DataTypes.STRING, allowNull: true },
    created_at: { type: DataTypes.DATE, allowNull: true },
    updated_at: { type: DataTypes.DATE, allowNull: true }
}, {
    tableName: 'websites',
    timestamps: false
});

module.exports = Website;
