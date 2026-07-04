require('dotenv').config();
const express = require('express');
const cors = require('cors');
const { testConnection } = require('./src/config/database');

const path = require('path');

const app = express();
const PORT = process.env.PORT || 5000;

// Middleware
app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve Static Uploads
app.use('/assets/uploads', express.static(path.join(__dirname, 'public/assets/uploads')));
app.use('/frontend', express.static(path.join(__dirname, 'public/frontend')));

// Routes
const authRoutes = require('./src/routes/auth');
const blogRoutes = require('./src/routes/blogRoutes');
const teamRoutes = require('./src/routes/teamRoutes');
const appServiceRoutes = require('./src/routes/appServiceRoutes');
const contactRoutes = require('./src/routes/contactRoutes');
const careerRoutes = require('./src/routes/careerRoutes');
const subscribeRoutes = require('./src/routes/subscribeRoutes');
const faqRoutes = require('./src/routes/faqRoutes');
const industryRoutes = require('./src/routes/industryRoutes');
const newsRoutes = require('./src/routes/newsRoutes');
const eventRoutes = require('./src/routes/eventRoutes');
const portfolioRoutes = require('./src/routes/portfolioRoutes');
const clientRoutes = require('./src/routes/clientRoutes');
const testimonialRoutes = require('./src/routes/testimonialRoutes');
const cloudServiceRoutes = require('./src/routes/cloudServiceRoutes');
const uiServiceRoutes = require('./src/routes/uiServiceRoutes');
const websiteRoutes = require('./src/routes/websiteRoutes');

app.use('/api/admin', authRoutes);
app.use('/api/blogs', blogRoutes);
app.use('/api/teams', teamRoutes);
app.use('/api/app-services', appServiceRoutes);
app.use('/api/contacts', contactRoutes);
app.use('/api/careers', careerRoutes);
app.use('/api/subscribes', subscribeRoutes);
app.use('/api/faqs', faqRoutes);
app.use('/api/industries', industryRoutes);
app.use('/api/news', newsRoutes);
app.use('/api/events', eventRoutes);
app.use('/api/portfolios', portfolioRoutes);
app.use('/api/clients', clientRoutes);
app.use('/api/testimonials', testimonialRoutes);
app.use('/api/cloud-services', cloudServiceRoutes);
app.use('/api/ui-services', uiServiceRoutes);
app.use('/api/websites', websiteRoutes);

// Health Check API
app.get('/api/health', (req, res) => {
  res.status(200).json({
    status: 'success',
    message: 'CIP Node.js Backend is running smoothly!',
    timestamp: new Date().toISOString()
  });
});

// Start Server & Test DB Connection
app.listen(PORT, async () => {
  console.log(`Server is running on http://localhost:${PORT}`);
  await testConnection();
});
