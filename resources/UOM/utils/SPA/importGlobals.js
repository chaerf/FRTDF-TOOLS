/**
 * This file contains logic for importing global Components and Filters.
 *
 * Global components, those defined inside `@components/global` directory.
 * Global filters, those defined inside `@filter` directory, must export a definition function as default export.
 */
import Vue from 'vue';
import upperFirst from 'lodash/upperFirst';
import camelCase from 'lodash/camelCase';

function importGlobal({ requireGlobal, register, pascal, prefix }) {
  requireGlobal.keys().forEach(fileName => {
    // Get component config
    const config = requireGlobal(fileName);

    // Strip the leading `./` and extension from the filename
    let name = fileName.replace(/^\.\/(.*)\.\w+$/, '$1');
    if (prefix) {
      name = `${prefix}-${name}`;
    }
    if (pascal) {
      // Get PascalCase name of component
      name = upperFirst(camelCase(name));
    }

    // Register component globally
    register(name, config.default || config);
  });
}

function registerComponents() {
  importGlobal({
    requireGlobal: require.context(
      // The relative path of the components folder
      '@/Tapir/components/shared',
      // Whether or not to look in subfolders
      false,
      // The regular expression used to match base component filenames
      /\w+\.vue$/
    ),
    prefix: 'y',
    register(name, config) {
      Vue.component(name, config);
    }
  });
}

function registerFilters() {
  importGlobal({
    requireGlobal: require.context(
      // The relative path of the components folder
      '@/Tapir/filters',
      // Whether or not to look in subfolders
      false,
      // The regular expression used to match base component filenames
      /\w+\.ts$/
    ),
    pascal: true,
    register(name, config) {
      Vue.filter(name, config);
    }
  });
}

export default () => {
  registerComponents();
  registerFilters();
};
