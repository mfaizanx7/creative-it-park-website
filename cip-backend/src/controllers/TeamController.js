const Team = require('../models/Team');
const { sequelize } = require('../config/database');

exports.getAllTeams = async (req, res) => {
  try {
    const teams = await sequelize.query(`
      SELECT teams.*, roles.name as role_name 
      FROM teams 
      LEFT JOIN roles ON teams.roll_id = roles.id
      WHERE teams.deleted_at IS NULL
    `, { type: sequelize.QueryTypes.SELECT });
    res.json({ status: 'success', data: teams });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getTeamById = async (req, res) => {
  try {
    const team = await Team.findByPk(req.params.id);
    if (!team) return res.status(404).json({ status: 'error', message: 'Team not found' });
    res.json({ status: 'success', data: team });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createTeam = async (req, res) => {
  try {
    const { name, roll_id, status } = req.body;
    const image = req.file ? req.file.filename : '';
    const team = await Team.create({ name, roll_id, image, status: status || 1 });
    res.status(201).json({ status: 'success', data: team });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateTeam = async (req, res) => {
  try {
    const team = await Team.findByPk(req.params.id);
    if (!team) return res.status(404).json({ status: 'error', message: 'Team not found' });
    const { name, roll_id, status } = req.body;
    if (name !== undefined) team.name = name;
    if (roll_id !== undefined) team.roll_id = roll_id;
    if (status !== undefined) team.status = status;
    if (req.file) team.image = req.file.filename;
    await team.save();
    res.json({ status: 'success', data: team });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteTeam = async (req, res) => {
  try {
    const team = await Team.findByPk(req.params.id);
    if (!team) return res.status(404).json({ status: 'error', message: 'Team not found' });
    await team.destroy();
    res.json({ status: 'success', message: 'Team deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.toggleStatus = async (req, res) => {
  try {
    const team = await Team.findByPk(req.params.id);
    if (!team) return res.status(404).json({ status: 'error', message: 'Team not found' });
    team.status = team.status === 1 ? 0 : 1;
    await team.save();
    res.json({ status: 'success', data: team });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
