<?php
function validateName($name)
{
  if (empty($name)) {
    $_SESSION['addGameErrors'][] = 'Name is required';
    return false;
  }
  return true;
}

function validatePrice($price)
{
  if (empty($price) || !is_numeric($price)) {
    $_SESSION['addGameErrors'][] = 'Price is required and must be a number';
    return false;
  }
  if ($price < 0) {
    $_SESSION['addGameErrors'][] = 'Price must be greater or equal than 0';
    return false;
  }
  return true;
}

function validateDescription($description)
{
  if (empty($description)) {
    $_SESSION['addGameErrors'][] = 'Description is required';
    return false;
  }
  return true;
}

function validateGenres($genresInput, $genres)
{
  if (empty($genresInput)) {
    $_SESSION['addGameErrors'][] = 'Genres are required';
    return false;
  }

  foreach ($genresInput as $genreInput) {
    if (!in_array($genreInput, array_column($genres, 'id'))) {
      $_SESSION['addGameErrors'][] = 'Invalid genre';
      return false;
    }
  }
  return true;
}

function validatePublisher($publisher)
{
  if (empty($publisher)) {
    $_SESSION['addGameErrors'][] = 'Publisher is required';
    return false;
  }
  return true;
}

function validateReleaseDate($releaseDate)
{
  if (empty($releaseDate)) {
    $_SESSION['addGameErrors'][] = 'Release date is required';
    return false;
  }

  if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $releaseDate)) {
    $_SESSION['addGameErrors'][] = 'Invalid release date';
    return false;
  }

  if (strtotime($releaseDate) > time()) {
    $_SESSION['addGameErrors'][] = 'Release date cannot be in the future';
    return false;
  }
  return true;
}

function validatePlatform($platform)
{
  if (empty($platform)) {
    $_SESSION['addGameErrors'][] = 'Platform is required';
    return false;
  }
  return true;
}

function validateAgeRating($ageRating)
{
  if (empty($ageRating)) {
    $_SESSION['addGameErrors'][] = 'Age rating is required';
    return false;
  }
  if (!in_array($ageRating, ['3', '7', '12', '16', '18'])) {
    $_SESSION['addGameErrors'][] = 'Invalid age rating';
    return false;
  }
  return true;
}
