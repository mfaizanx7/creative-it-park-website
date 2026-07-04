const Testimonial = require('../models/Testimonial');

exports.getAllTestimonials = async (req, res) => {
  try {
    const items = await Testimonial.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getTestimonialById = async (req, res) => {
  try {
    const item = await Testimonial.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Testimonial not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createTestimonial = async (req, res) => {
  try {
    const { name, detail, subject } = req.body;
    const image = req.file ? req.file.filename : '';
    const item = await Testimonial.create({ name, detail, subject, image });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateTestimonial = async (req, res) => {
  try {
    const item = await Testimonial.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Testimonial not found' });
    const { name, detail, subject } = req.body;
    if (name !== undefined) item.name = name;
    if (detail !== undefined) item.detail = detail;
    if (subject !== undefined) item.subject = subject;
    if (req.file) item.image = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteTestimonial = async (req, res) => {
  try {
    const item = await Testimonial.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Testimonial not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'Testimonial deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
