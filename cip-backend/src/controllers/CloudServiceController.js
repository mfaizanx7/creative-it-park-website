const CloudService = require('../models/CloudService');

exports.getAllCloudServices = async (req, res) => {
  try {
    const where = req.query.type ? { type: req.query.type } : {};
    const items = await CloudService.findAll({ where, order: [['id', 'ASC']] });
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getCloudServiceById = async (req, res) => {
  try {
    const item = await CloudService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'CloudService not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createCloudService = async (req, res) => {
  try {
    const item = await CloudService.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateCloudService = async (req, res) => {
  try {
    const item = await CloudService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'CloudService not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteCloudService = async (req, res) => {
  try {
    const item = await CloudService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'CloudService not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'CloudService deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
