Requirements Specification A frontend application needs to fetch organizational chart nodes and display them as a tree of folders and, therefore, depends on a backend API to efficiently obtain such data.
The candidate is asked to implement a PHP script api.php to return organizational chart nodes under a certain parent and support pagination.

The script will be called via HTTP (method GET) through an Apache web server and it will receive the following input params:
● node_id (integer, required): the unique ID of the selected node.
● language (enum, required): language identifier. Possible values: "english", "italian".
● search_keyword (string, optional): a search term used to filter results. If provided, restricts the results to "all children nodes under node_id whose nodeName in the given language contains search_keyword (case insensitive)".
● page_num (integer, optional): the 0-based identifier of the page to retrieve. If not provided, defaults to “0”.
● page_size (integer, optional): the size of the page to retrieve, ranging from 0 to 1000. If not provided, defaults to “100”. The API should return a JSON with the following fields:
● nodes (array, required): 0 or more nodes matching the given conditions. Each node contains: ○ node_id (integer, required): the unique ID of the child node. ○ name (string, required): the node name translated in the requested language. ○ children_count (integer, required): the number of child nodes of this node.
● error (string, optional): If there was an error, return the generated message.
