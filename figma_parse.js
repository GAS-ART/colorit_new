const fs = require('fs');
const data = JSON.parse(fs.readFileSync('d:/www/colorit_new/figma_same_result.json', 'utf8'));
const doc = data.nodes['241:2145'].document;

function printNode(node, depth = 0) {
  const indent = '  '.repeat(depth);
  let info = indent + '- ' + node.name + ' (' + node.type + ')';
  if (node.fills && node.fills.length) {
    node.fills.forEach(fill => {
      if (fill.type === 'SOLID' && fill.color) {
        info += ' bg: rgba(' + Math.round(fill.color.r*255) + ', ' + Math.round(fill.color.g*255) + ', ' + Math.round(fill.color.b*255) + ', ' + (fill.opacity !== undefined ? fill.opacity : 1) + ')';
      } else if (fill.type === 'GRADIENT_LINEAR') {
        info += ' gradient';
      }
    });
  }
  if (node.cornerRadius) info += ' radius: ' + node.cornerRadius;
  if (node.absoluteBoundingBox) info += ' rect: ' + Math.round(node.absoluteBoundingBox.width) + 'x' + Math.round(node.absoluteBoundingBox.height);
  console.log(info);
  if (node.children) node.children.forEach(c => printNode(c, depth + 1));
}

printNode(doc);
