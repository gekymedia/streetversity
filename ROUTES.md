# Streetversity Route Names Reference

## Public Routes
- home -> /
- about -> /about  
- contact -> /contact
- contact.store -> POST /contact
- blog.index -> /blog
- blog.show -> /blog/{slug}
- blog.comments.store -> POST /blog/{post}/comments

## Authenticated User Routes
- comments.destroy -> DELETE /comments/{comment}
- profile.edit -> /profile
- profile.update -> PATCH /profile  
- profile.destroy -> DELETE /profile

## Admin Routes
- admin.dashboard -> /admin/dashboard
- admin.blog.index -> /admin/blog
- admin.blog.create -> /admin/blog/create
- admin.blog.store -> POST /admin/blog
- admin.blog.show -> /admin/blog/{post}
- admin.blog.edit -> /admin/blog/{post}/edit
- admin.blog.update -> PUT/PATCH /admin/blog/{post}
- admin.blog.destroy -> DELETE /admin/blog/{post}
- admin.comments.index -> /admin/comments
- admin.comments.approve -> POST /admin/comments/{comment}/approve
- admin.comments.reject -> POST /admin/comments/{comment}/reject
- admin.comments.destroy -> DELETE /admin/comments/{comment}
- admin.messages.index -> /admin/messages
