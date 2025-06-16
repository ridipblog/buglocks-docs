<div class="mt-4">
    <h4 class="text-primary">📘 <?= $heading ?? 'Default Heading' ?> </h4>
    <p>
        The <code><?= $method ?? '' ?></code> <?= $methodHeading ?? 'Default heading passed ' ?>
    </p>

    <div class="example-box">
        <h6 class="text-success">Example (PHP):</h6>
        <div class="code-block">
            <pre><code>
<?= $code ?>
</code></pre>
        </div>
    </div>

    <p class="mt-1">
        <?= $methodNote ?? '' ?>
    </p>
</div>
