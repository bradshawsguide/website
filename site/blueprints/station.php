<?php if(!defined('KIRBY')) exit ?>

title: Region
pages: false
fields:
  title:
    label: Title
    type: text
    required: true
  section:
    label: Section
    type: radio
    required: true
    columns: 4
    options:
      1: Section 1
      2: Section 2
      3: Section 3
      4: Section 4
  notes:
    label: Notes
    type: text
  info:
    label: Information
    type: structure
    style: table
    fields:
      term:
        label: Term
        type: text
      description:
        label: Description
        type: text
  meta:
    label: Meta
    type: textarea
  text:
    label: Text
    type: markdown
  distances2:
    label: Distances
    type: structure
    style: table
    fields:
      location:
        label: Location
        type: textarea
      distance:
        label: Miles
        type: number
  company:
    label: Company
    type: textarea
    buttons: false
  route:
    label: Route
    type: textarea
    buttons: false
  related:
    label: Related links
    type: textarea
    buttons: false
