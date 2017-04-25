<?php  return array (
  'tagger.getresourceswhere.tags_desc' => 'Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded',
  'tagger.getresourceswhere.groups_desc' => 'Comma separated list of Tagger Groups. Only from those groups will Tags be allowed',
  'tagger.getresourceswhere.where_desc' => 'Original getResources where property. If you used where property in your current getResources call, move it here',
  'tagger.gettags.resources_desc' => 'Comma separated list of resources for which will be listed Tags',
  'tagger.gettags.groups_desc' => 'Comma separated list of Tagger Groups for which will be listed Tags',
  'tagger.gettags.rowTpl_desc' => 'Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered',
  'tagger.gettags.outTpl_desc' => 'Name of a chunk that will be used for wrapping all tags. If no chunk is given, tags will be rendered without a wrapper',
  'tagger.gettags.separator_desc' => 'String separator, that will be used for separating Tags',
  'tagger.gettags.target_desc' => 'An ID of a resource that will be used for generating URI for a Tag. If no ID is given, current Resource ID will be used',
  'tagger.gettags.showUnused_desc' => 'If 1 is set, Tags that are not assigned to any Resource will be included to the output as well',
  'tagger.gettags.contexts_desc' => 'If set, will display only tags for resources in given contexts. Contexts can be separated by a comma',
  'tagger.gettags.toPlaceholder_desc' => 'If set, output will return in placeholder with given name',
  'tagger.gettags.showUnpublished_desc' => 'If 1 is set, Tags that are assigned only to unpublished Resources will be included to the output as well',
  'tagger.gettags.showDeleted_desc' => 'If 1 is set, Tags that are assigned only to deleted Resources will be included to the output as well',
  'tagger.gettags.limit_desc' => 'Limit number of returned tag Tags',
  'tagger.gettags.offset_desc' => 'Offset the output by this number of Tags',
  'tagger.gettags.totalPh_desc' => 'Placeholder to output the total number of Tags regardless of &limit and &offset',
  'tagger.getresourceswhere.likeComparison_desc' => 'If set to 1, tags will compare using LIKE',
  'tagger.gettags.sort_desc' => 'Sort options in JSON. Example {"tag": "ASC"} or multiple sort options {"group_id": "ASC", "tag": "ASC"}',
  'tagger.getresourceswhere.tagField_desc' => 'Field that will be used to compare with given tags. Default: alias',
  'tagger.getresourceswhere.matchAll_desc' => 'If set to 1, resource must have all specified tags. Default: 0',
);