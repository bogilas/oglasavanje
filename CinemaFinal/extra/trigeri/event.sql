CREATE EVENT clearProjections
    ON SCHEDULE
      EVERY 12 HOUR
    COMMENT 'Clears out projection table every 12 hours.'
    DO
      DELETE FROM projection where date_time<NOW();