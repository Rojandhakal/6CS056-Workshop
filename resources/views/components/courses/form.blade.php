
@props([
    'course',
    'buttonText' => 'Save Course'
])

<x-form-input
    name="name"
    label="Course Name"
    :value="$course->name"
    required
/>

<x-form-textarea
    name="description"
    label="Description"
    :value="$course->description ?? ''"
/>

<x-form-input
    name="duration"
    label="Duration (Weeks)"
    type="number"
    :value="$course->duration"
    required
/>

<x-form-input
    name="fee"
    label="Course Fee"
    type="number"
    :value="$course->fee"
    required
/>

<div class="form-group">
    <label for="difficulty">Difficulty</label>

    <select name="difficulty" id="difficulty" class="form-control" required>
        <option value="">Select Difficulty</option>

        <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
            Easy
        </option>

        <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
            Medium
        </option>

        <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
            Hard
        </option>
    </select>

    @error('difficulty')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="is_active">Active Status</label>

    <select name="is_active" id="is_active" class="form-control" required>
        <option value="1" {{ old('is_active', $course->is_active ?? 1) == '1' ? 'selected' : '' }}>
            Active
        </option>

        <option value="0" {{ old('is_active', $course->is_active ?? 1) == '0' ? 'selected' : '' }}>
            Inactive
        </option>
    </select>

    @error('is_active')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ $buttonText }}
</button>
