const UiService = require('../models/UiService');

exports.getAllUiServices = async (req, res) => {
  try {
    const where = req.query.type ? { type: req.query.type } : {};
    const items = await UiService.findAll({ where, order: [['id', 'ASC']] });
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getUiServiceById = async (req, res) => {
  try {
    const item = await UiService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'UiService not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createUiService = async (req, res) => {
  try {
    const { heading, sub_head, description, type } = req.body;
    const icon = req.file ? req.file.filename : '';
    const item = await UiService.create({ heading, sub_head, description, type, icon });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateUiService = async (req, res) => {
  try {
    const item = await UiService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'UiService not found' });
    const { heading, sub_head, description, type } = req.body;
    if (heading !== undefined) item.heading = heading;
    if (sub_head !== undefined) item.sub_head = sub_head;
    if (description !== undefined) item.description = description;
    if (type !== undefined) item.type = type;
    if (req.file) item.icon = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteUiService = async (req, res) => {
  try {
    const item = await UiService.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'UiService not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'UiService deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
