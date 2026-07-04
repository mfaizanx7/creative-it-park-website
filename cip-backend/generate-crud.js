const fs = require('fs');
const path = require('path');

const models = [
  'Contact', 'Career', 'Subscribe', 'Faq', 'Industry', 'News', 
  'Event', 'Portfolio', 'Client', 'Testimonial', 'CloudService', 'UiService'
];

models.forEach(modelName => {
  const lowerName = modelName.charAt(0).toLowerCase() + modelName.slice(1);
  
  // Controller Content
  const controllerContent = `const ${modelName} = require('../models/${modelName}');

exports.getAll${modelName}s = async (req, res) => {
  try {
    const items = await ${modelName}.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.get${modelName}ById = async (req, res) => {
  try {
    const item = await ${modelName}.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: '${modelName} not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.create${modelName} = async (req, res) => {
  try {
    const item = await ${modelName}.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.update${modelName} = async (req, res) => {
  try {
    const item = await ${modelName}.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: '${modelName} not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.delete${modelName} = async (req, res) => {
  try {
    const item = await ${modelName}.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: '${modelName} not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: '${modelName} deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
`;

  // Routes Content
  const routeContent = `const express = require('express');
const router = express.Router();
const ${lowerName}Controller = require('../controllers/${modelName}Controller');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', ${lowerName}Controller.getAll${modelName}s);
router.get('/:id', ${lowerName}Controller.get${modelName}ById);
router.post('/', authMiddleware, ${lowerName}Controller.create${modelName});
router.put('/:id', authMiddleware, ${lowerName}Controller.update${modelName});
router.delete('/:id', authMiddleware, ${lowerName}Controller.delete${modelName});

module.exports = router;
`;

  fs.writeFileSync(path.join(__dirname, 'src', 'controllers', `${modelName}Controller.js`), controllerContent);
  fs.writeFileSync(path.join(__dirname, 'src', 'routes', `${lowerName}Routes.js`), routeContent);
});

console.log('All controllers and routes generated successfully!');
