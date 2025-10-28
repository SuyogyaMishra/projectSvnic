<?php

if (!function_exists('render_modal')) {
    /**
     * Render a Bootstrap modal dynamically.
     *
     * @param string $id Modal ID
     * @param string $title Modal title
     * @param string|null $body HTML body content
     * @param string $size Bootstrap size (sm, lg, xl)
     * @param bool $ajax Whether the modal content will load dynamically
     * @param bool $clearOnClose Whether to clear content/form on modal close
     * @return string
     */
    function render_modal($id, $title = '', $body = null, $size = '', $ajax = false, $clearOnClose = true)
    {
        $sizeClass = $size ? 'modal-' . $size : '';

        // AJAX modal (content loads dynamically)
        if ($ajax) {
            return <<<HTML
<div class="modal fade" id="{$id}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog {$sizeClass}">
    <div class="modal-content" id="{$id}Content">
      <!-- AJAX-loaded content will go here -->
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('{$id}');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function () {
            // Clear content when closed
            const content = document.getElementById('{$id}Content');
            if (content) content.innerHTML = '<!-- Cleared on close -->';
        });
    }
});
</script>
HTML;
        }

        // Static modal (normal HTML body)
        $clearScript = $clearOnClose ? <<<JS
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('{$id}');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function () {
            // Clear all form inputs when modal closes
            const forms = modal.querySelectorAll('form');
            forms.forEach(form => form.reset());

            // Optionally clear validation messages or extra content
            const errors = modal.querySelectorAll('.text-danger, .invalid-feedback');
            errors.forEach(el => el.textContent = '');
        });
    }
});
</script>
JS : '';

        return <<<HTML
<div class="modal fade" id="{$id}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog {$sizeClass}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{$title}</h5>
        <button type="button" class="btn-close closeBtn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {$body}
      </div>
    </div>
  </div>
</div>
{$clearScript}
HTML;
    }
}
