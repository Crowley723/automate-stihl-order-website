# Stihl Order Website
# Requirements

- Allow uploads for stihl inventory and backorders
- Data history, order history/management
- Download of various reports
- Allow sql for accessing databases as well as script creation
- Use authelia for user identity, hopefully using FIDO/Yubikey

# Workflow

1.  Upload Stihl export
    1.  parse upload
    2.  raise exception regarding new/unknown items, changed part #, or sku
    3.  store in database
2.  Upload Backorders
    1.  parse upload
    2.  raise exceptions for new/unknown items, changed part #, or sku
    3.  store in database
3.  Compose Order
    - Don't order stuff that is already on backorder
    - download order
    - Allow creation of special orders (mark as special order but don't store customer's info, maybe first name)
4.  Allow item management