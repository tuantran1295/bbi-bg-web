use bbi_bg_web_db;
ALTER TABLE companies
ADD COLUMN created_at datetime,
ADD COLUMN updated_at datetime;
UPDATE images SET created_at = NOW(), updated_at=NOW() WHERE created_at IS NULL AND updated_at IS NULL;