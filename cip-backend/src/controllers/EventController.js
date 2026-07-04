const Event = require('../models/Event');

exports.getAllEvents = async (req, res) => {
  try {
    const items = await Event.findAll({ order: [['id', 'DESC']] });
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getEventById = async (req, res) => {
  try {
    const item = await Event.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Event not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createEvent = async (req, res) => {
  try {
    const { description } = req.body;
    const picture = req.file ? req.file.filename : '';
    const item = await Event.create({ description, picture });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateEvent = async (req, res) => {
  try {
    const item = await Event.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Event not found' });
    const { description } = req.body;
    if (description !== undefined) item.description = description;
    if (req.file) item.picture = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteEvent = async (req, res) => {
  try {
    const item = await Event.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Event not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'Event deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
