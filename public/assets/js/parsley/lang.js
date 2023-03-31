// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('id', {
  defaultMessage: "Tidak valid",
  type: {
    email:        "Email tidak valid",
    url:          "URL tidak valid",
    number:       "Nomor tidak valid",
    integer:      "Integer tidak valid",
    digits:       "Harus berupa digit",
    alphanum:     "Harus berupa alphanumeric"
  },
  notblank:       "Tidak boleh kosong",
  required:       "Tidak boleh kosong",
  pattern:        "Tidak valid",
  min:            "Harus lebih besar atau sama dengan %s.",
  max:            "Harus lebih kecil atau sama dengan %s.",
  range:          "Harus dalam rentang %s dan %s.",
  minlength:      "Terlalu pendek, minimal %s karakter atau lebih.",
  maxlength:      "Terlalu panjang, maksimal %s karakter atau kurang.",
  length:         "Panjang karakter harus dalam rentang %s dan %s",
  mincheck:       "Pilih minimal %s pilihan",
  maxcheck:       "Pilih maksimal %s pilihan",
  check:          "Pilih antar %s dan %s pilihan",
  equalto:        "Harus sama",
  dateiso:        "Harus tanggal yang valid (YYYY-MM-DD)."
});

Parsley.addMessages('en', {
  defaultMessage: "This value seems to be invalid.",
  type: {
    email:        "This value should be a valid email.",
    url:          "This value should be a valid url.",
    number:       "This value should be a valid number.",
    integer:      "This value should be a valid integer.",
    digits:       "This value should be digits.",
    alphanum:     "This value should be alphanumeric."
  },
  notblank:       "This value should not be blank.",
  required:       "This value is required.",
  pattern:        "This value seems to be invalid.",
  min:            "This value should be greater than or equal to %s.",
  max:            "This value should be lower than or equal to %s.",
  range:          "This value should be between %s and %s.",
  minlength:      "This value is too short. It should have %s characters or more.",
  maxlength:      "This value is too long. It should have %s characters or fewer.",
  length:         "This value length is invalid. It should be between %s and %s characters long.",
  mincheck:       "You must select at least %s choices.",
  maxcheck:       "You must select %s choices or fewer.",
  check:          "You must select between %s and %s choices.",
  equalto:        "This value should be the same.",
  euvatin:        "It's not a valid VAT Identification Number.",
  dateiso:  "This value should be a valid date (YYYY-MM-DD).",
  date: "It must be a valid date with format %s",
  datebeforenow: "Date must be valid with format %s and be before now",
  dateafternow: "Date must be valid with format %s and be after now",
  minwords: "This value is too short. It should have %s words or more.",
  maxwords: "This value is too long. It should have %s words or fewer.",
  words:    "This value length is invalid. It should be between %s and %s words long.",
  gt:       "This value should be greater than %s.",
  gte:      "This value should be greater or equal to %s.",
  lt:       "This value should be less than %s.",
  lte:      "This value should be less or equal to %s.",
  notequalto: "This value should be different from %s."
});