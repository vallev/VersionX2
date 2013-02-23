<?php
/**
 * VersionX
 *
 * Copyright 2011-2013 by Mark Hamstra <hello@markhamstra.com>
 *
 * This file is part of VersionX, a real estate property listings component
 * for MODX Revolution.
 *
 * VersionX is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * VersionX is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * VersionX; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
*/

$xpdo_meta_map['vxPlugin']= array (
  'package' => 'versionx',
  'version' => '1.1',
  'table' => 'versionx_plugin',
  'extends' => 'vxBaseObject',
  'fields' => 
  array (
    'name' => '',
    'description' => 'Chunk',
    'category' => 0,
    'plugincode' => '',
    'locked' => 0,
    'properties' => NULL,
    'disabled' => 0,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'description' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => 'Chunk',
    ),
    'category' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'fk',
    ),
    'plugincode' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'locked' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
    'properties' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'array',
      'null' => true,
    ),
    'disabled' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
  ),
  'aggregates' => 
  array (
    'Plugin' => 
    array (
      'class' => 'modPlugin',
      'local' => 'content_id',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
  ),
);
