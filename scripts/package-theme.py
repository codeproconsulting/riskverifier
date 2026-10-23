#!/usr/bin/env python3
"""Rebuild and verify the WordPress upload ZIP using only Python's standard library."""
from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED

root = Path(__file__).resolve().parents[1]
theme = root / 'riskverifier-theme'
archive = root / 'riskverifier-theme.zip'
files = [path for path in sorted(theme.rglob('*')) if path.is_file()
         and not any(part.startswith('.') for part in path.relative_to(theme).parts)]
assert all((theme / name).is_file() for name in ('style.css', 'functions.php', 'index.php'))
with ZipFile(archive, 'w', ZIP_DEFLATED) as output:
    for path in files:
        output.write(path, path.relative_to(root).as_posix())
with ZipFile(archive) as output:
    assert output.testzip() is None
    assert set(output.namelist()) == {path.relative_to(root).as_posix() for path in files}
    for path in files:
        assert output.read(path.relative_to(root).as_posix()) == path.read_bytes()
print(f'Built and verified {archive.name}: {len(files)} files.')
