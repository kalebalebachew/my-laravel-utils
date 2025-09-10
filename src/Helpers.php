<?php

namespace MyLaravelUtils;

use Illuminate\Support\Facades\Request;
class Helpers
{
    /**
     * Get all values for a query parameter using comma-separated format.
     *
     * Example: ?status=1,2 or ?status[]=1&status[]=2 -> ["1", "2"]
     */
    public static function parseMultiParam(string $key): array
    {
        $value = Request::query($key);

        if ($value === null || $value === '') {
            return [];
        }

        $items = is_array($value) ? $value : explode(',', $value);

        $trimmed = array_map(static fn($v) => is_string($v) ? trim($v) : $v, $items);
        $filtered = array_filter($trimmed, static fn($v) => $v !== '' && $v !== null);

        return array_values(array_map(static fn($v) => (string) $v, $filtered));
    }
}