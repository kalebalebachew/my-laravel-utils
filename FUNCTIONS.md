# Helper Functions

These are usage examples for the helper functions in **My Laravel Utils**.

---

## `parseMultiParam(string $key): array`

**Description:**  
Get all values for a query parameter using a comma-separated format.

**Example Request:**  
`/api/users?roles=admin,editor,viewer`

**Example Usage in a Laravel Controller:**
```php
$roles = parseMultiParam('roles');
// ["admin", "editor", "viewer"]
```

***More to come if i care enough to write examples for them :)***

