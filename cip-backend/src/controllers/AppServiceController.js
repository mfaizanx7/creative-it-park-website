const AppService = require('../models/AppService');

exports.getAllAppServices = async (req, res) => {
  try {
    const where = req.query.type ? { type: req.query.type } : {};
    const services = await AppService.findAll({ where, order: [['id', 'ASC']] });
    res.json({ status: 'success', data: services });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getAppServiceById = async (req, res) => {
  try {
    const service = await AppService.findByPk(req.params.id);
    if (!service) return res.status(404).json({ status: 'error', message: 'AppService not found' });
    res.json({ status: 'success', data: service });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createAppService = async (req, res) => {
  try {
    const { heading, sub_head, description, type, link } = req.body;
    const icon = req.file ? req.file.filename : '';
    const service = await AppService.create({ heading, sub_head, description, type, link, icon });
    res.status(201).json({ status: 'success', data: service });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateAppService = async (req, res) => {
  try {
    const service = await AppService.findByPk(req.params.id);
    if (!service) return res.status(404).json({ status: 'error', message: 'AppService not found' });
    const { heading, sub_head, description, type, link } = req.body;
    if (heading !== undefined) service.heading = heading;
    if (sub_head !== undefined) service.sub_head = sub_head;
    if (description !== undefined) service.description = description;
    if (type !== undefined) service.type = type;
    if (link !== undefined) service.link = link;
    if (req.file) service.icon = req.file.filename;
    await service.save();
    res.json({ status: 'success', data: service });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteAppService = async (req, res) => {
  try {
    const service = await AppService.findByPk(req.params.id);
    if (!service) return res.status(404).json({ status: 'error', message: 'AppService not found' });
    
    await service.destroy();
    res.json({ status: 'success', message: 'AppService deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
