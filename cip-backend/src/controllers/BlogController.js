const Blog = require('../models/Blog');

// 1. Get all blogs (Public)
exports.getAllBlogs = async (req, res) => {
  try {
    const blogs = await Blog.findAll({
      order: [['created_at', 'DESC']]
    });
    res.status(200).json({ status: 'success', data: blogs });
  } catch (error) {
    console.error('Fetch blogs error:', error);
    res.status(500).json({ message: 'Server Error while fetching blogs' });
  }
};

// 2. Get single blog by ID (Public)
exports.getBlogById = async (req, res) => {
  try {
    const blog = await Blog.findByPk(req.params.id);
    if (!blog) {
      return res.status(404).json({ message: 'Blog not found' });
    }
    res.status(200).json({ status: 'success', data: blog });
  } catch (error) {
    console.error('Fetch blog by id error:', error);
    res.status(500).json({ message: 'Server Error while fetching blog' });
  }
};

// Get single blog by Slug (Public)
exports.getBlogBySlug = async (req, res) => {
  try {
    const blog = await Blog.findOne({ where: { slug: req.params.slug } });
    if (!blog) {
      return res.status(404).json({ message: 'Blog not found' });
    }
    res.status(200).json({ status: 'success', data: blog });
  } catch (error) {
    console.error('Fetch blog by slug error:', error);
    res.status(500).json({ message: 'Server Error while fetching blog' });
  }
};

// 3. Create a blog (Admin Protected)
exports.createBlog = async (req, res) => {
  try {
    const { title, description, author, slug, category, tags } = req.body;
    if (!title || !author) return res.status(400).json({ message: 'Title and Author are required' });
    const image = req.file ? req.file.filename : '';
    const generatedSlug = slug || title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
    const blog = await Blog.create({ title, slug: generatedSlug, description, author, image, category, tags, created_at: new Date(), updated_at: new Date() });
    res.status(201).json({ status: 'success', message: 'Blog created successfully', data: blog });
  } catch (error) {
    console.error('Create blog error:', error);
    res.status(500).json({ message: 'Server Error while creating blog' });
  }
};

// 4. Update a blog (Admin Protected)
exports.updateBlog = async (req, res) => {
  try {
    const { title, description, author, slug, category, tags } = req.body;
    const blog = await Blog.findByPk(req.params.id);
    if (!blog) return res.status(404).json({ message: 'Blog not found' });
    if (title) { blog.title = title; blog.slug = slug || title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, ''); }
    else if (slug) blog.slug = slug;
    if (description !== undefined) blog.description = description;
    if (author) blog.author = author;
    if (category !== undefined) blog.category = category;
    if (tags !== undefined) blog.tags = tags;
    if (req.file) blog.image = req.file.filename;
    blog.updated_at = new Date();
    await blog.save();
    res.status(200).json({ status: 'success', message: 'Blog updated successfully', data: blog });
  } catch (error) {
    console.error('Update blog error:', error);
    res.status(500).json({ message: 'Server Error while updating blog' });
  }
};

// 5. Delete a blog (Admin Protected)
exports.deleteBlog = async (req, res) => {
  try {
    const blog = await Blog.findByPk(req.params.id);
    if (!blog) {
      return res.status(404).json({ message: 'Blog not found' });
    }

    await blog.destroy();
    res.status(200).json({ status: 'success', message: 'Blog deleted successfully' });
  } catch (error) {
    console.error('Delete blog error:', error);
    res.status(500).json({ message: 'Server Error while deleting blog' });
  }
};
