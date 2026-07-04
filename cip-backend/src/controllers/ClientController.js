const Client = require('../models/Client');

exports.getAllClients = async (req, res) => {
  try {
    const items = await Client.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getClientById = async (req, res) => {
  try {
    const item = await Client.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Client not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createClient = async (req, res) => {
  try {
    const { name, link } = req.body;
    const image = req.file ? req.file.filename : '';
    const item = await Client.create({ name, link, image });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateClient = async (req, res) => {
  try {
    const item = await Client.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Client not found' });
    const { name, link } = req.body;
    if (name !== undefined) item.name = name;
    if (link !== undefined) item.link = link;
    if (req.file) item.image = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteClient = async (req, res) => {
  try {
    const item = await Client.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Client not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'Client deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
