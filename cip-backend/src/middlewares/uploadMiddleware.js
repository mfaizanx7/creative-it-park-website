const multer = require('multer');
const path = require('path');
const fs = require('fs');

const uploadFolders = {
  blogs:       'public/assets/uploads/blogs',
  team:        'public/assets/uploads/team-images',
  portfolio:   'public/assets/uploads/portfolio',
  client:      'public/assets/uploads/client',
  industry:    'public/assets/uploads/industry',
  news:        'public/assets/uploads/news',
  events:      'public/assets/uploads/events',
  app_service: 'public/assets/uploads/app_service/icon',
  ui_service:  'public/assets/uploads/ui_service/icon',
  cloud_service:'public/assets/uploads/cloud_service/icon',
  website:     'public/assets/uploads/web_perf/icon',
  testimonial: 'public/assets/uploads/testimonials',
};

const getUploadDir = (folder) => {
  const relative = uploadFolders[folder] || `public/assets/uploads/${folder}`;
  const absolute = path.join(__dirname, '../../', relative);
  if (!fs.existsSync(absolute)) fs.mkdirSync(absolute, { recursive: true });
  return absolute;
};

const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, getUploadDir(req.uploadFolder || 'blogs'));
  },
  filename: function (req, file, cb) {
    cb(null, Date.now() + '-' + Math.round(Math.random() * 1e9) + path.extname(file.originalname));
  },
});

const fileFilter = (req, file, cb) => {
  if (file.mimetype.startsWith('image/')) cb(null, true);
  else cb(new Error('Only image files are allowed!'), false);
};

const upload = multer({ storage, fileFilter, limits: { fileSize: 5 * 1024 * 1024 } });

// Factory: sets folder context then runs multer single upload
const uploadFor = (folder, fieldName = 'image') => (req, res, next) => {
  req.uploadFolder = folder;
  upload.single(fieldName)(req, res, next);
};

module.exports = { upload, uploadFor };
