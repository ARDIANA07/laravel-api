API Documentation – Laravel Posts & Comments
📌 Base URL
http://127.0.0.1:8000/api

📂 Endpoints
🔹 GET /posts
Description: Get list of all posts with comment count.

[
  {
    "id": 1,
    "title": "First Post",
    "content": "This is the content.",
    "comments_count": 3,
    "created_at": "...",
    "updated_at": "..."
  }
]
🔹 GET /posts/{id}
Description: Get a single post with all comments.

{
  "id": 1,
  "title": "First Post",
  "content": "This is the content.",
  "created_at": "...",
  "updated_at": "...",
  "comments": [
    {
      "id": 1,
      "author": "John",
      "message": "Great post!",
      "created_at": "...",
      "updated_at": "..."
    }
  ]
}
🔹 POST /posts
Description: Create a new post

Body (JSON):

{
  "title": "New Post",
  "content": "This is the body of the post"
}
Validation:

title (required, string)

content (required, string)

{
  "message": "Post created successfully",
  "data": {
    "id": 6,
    "title": "New Post",
    "content": "This is the body of the post",
    ...
  }
}
🔹 PUT /posts/{id}
Description: Update an existing post

Body (JSON):

{
  "title": "Updated Title",
  "content": "Updated content"
}
Response:

{
  "message": "Post updated successfully",
  "data": {
    "id": 1,
    "title": "Updated Title",
    ...
  }
}
🔹 DELETE /posts/{id}
Description: Delete a post and its comments

{
  "message": "Post deleted successfully"
}
🔹 POST /posts/{id}/comments
Description: Add a comment to a post

Body (JSON):

{
  "author": "Jane",
  "message": "Very helpful article"
}
Validation:

author (required, string)

message (required, string)

{
  "message": "Comment added successfully",
  "data": {
    "id": 10,
    "post_id": 1,
    "author": "Jane",
    "message": "Very helpful article"
  }
}
🔹 DELETE /comments/{id}
Description: Delete a comment

{
  "message": "Comment deleted successfully"
}
🛡️ Error Responses
400 Bad Request

{
  "message": "Validation failed",
  "errors": {
    "title": ["The title field is required."]
  }
}
404 Not Found

{
  "message": "Post not found"
}
🧪 Testing
Gunakan tools seperti Postman atau Insomnia untuk menguji endpoint dengan metode GET, POST, PUT, dan DELETE. Pastikan kamu sudah menjalankan Laravel server:

php artisan serve

