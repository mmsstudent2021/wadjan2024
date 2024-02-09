# Area Calculator

## Available Endpoints

### Calculate Area

- **Endpoint**: `/area.php`
- **Method**: POST
- **Request Body**:
  - `width` (number): The width of the shape.
  - `breadth` (number): The breadth or height of the shape.
- **Responses**:
  - `200 OK`: Returns the calculated area in the response body.
    ```json
    {
        "width": 15,
        "breadth": 50,
        "area": 750
    }
    ```
  - `400 Bad Request`: If the request is missing required parameters or contains invalid data.
    ```json
    {
        "error": "Invalid request. Please provide 'shape', 'width', and 'breadth' parameters."
    }
    ```
  - `404 Not Found`: If the specified shape is not supported.
    ```json
    {
        "error": "Shape not found. Please choose a valid shape."
    }
    ```

## Supported Shapes
- Rectangle
- Square

## Example Usage
```bash
curl -X POST https://api.example.com/area-calculator/calculate -d '{"shape": "rectangle", "width": 5, "breadth": 10}'


