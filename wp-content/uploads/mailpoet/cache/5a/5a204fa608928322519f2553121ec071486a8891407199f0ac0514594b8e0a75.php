<?php

/* subscribers/importExport/export.html */
class __TwigTemplate_219bf3f9c58eaa8e78d31581be725b8a6a83784432f4c8b0abc5e3c056f613de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "subscribers/importExport/export.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"mailpoet_subscribers_export\" class=\"wrap\">
  <h1 class=\"title\">
    ";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export");
        echo "
    <a class=\"page-title-action\" href=\"?page=mailpoet-subscribers#/\">";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Back to Subscribers");
        echo "</a>
  </h1>
  ";
        // line 9
        if (twig_test_empty(($context["segments"] ?? null))) {
            // line 10
            echo "  <div class=\"error\">
    <p>";
            // line 11
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yikes! Couldn't find any subscribers");
            echo "</p>
  </div>
  ";
        }
        // line 14
        echo "  <div class=\"inside\">
    <!-- Template data -->
  </div>
</div>
<script id=\"mailpoet_subscribers_export_template\" type=\"text/x-handlebars-template\">
  <div id=\"export_result_notice\" class=\"updated mailpoet_hidden\">
    <!-- Result message -->
  </div>
  <table class=\"form-table\">
    <tbody>
    {{#if segments}}
    <tr>
      <th scope=\"row\">
        <label for=\"export_lists\">
          ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Pick one or multiple lists");
        echo "
        </label>
      </th>
      <td>
        <select id=\"export_lists\" data-placeholder=\"";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "Verb");
        echo "\" multiple=\"multiple\"></select>
      </td>
    </tr>
    {{/if}}
    <tr>
      <th scope=\"row\">
        <label for=\"export_columns\">
          ";
        // line 39
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("List of fields to export");
        echo "
          <p class=\"description\">
            ";
        // line 41
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]Read about the Global status.[/link]"), "http://beta.docs.mailpoet.com/article/245-what-is-global-status", array("target" => "_blank"));
        // line 44
        echo "
          </p>
        </label>
      </th>
      <td>
        <select id=\"export_columns\" data-placeholder=\"";
        // line 49
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "Verb");
        echo "\" multiple=\"multiple\"></select>
      </td>
    </tr>
    {{#if groupBySegmentOption}}
    <tr class=\"mailpoet_group_by_list mailpoet_hidden\">
      <th scope=\"row\">
        ";
        // line 55
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Group subscribers by list");
        echo "
      </th>
      <td>
        <input type=\"checkbox\" name=\"option_group_by_list\" checked>
      </td>
    </tr>
    {{/if}}
    <tr>
      <th scope=\"row\">
        ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Format");
        echo "
      </th>
      <td>
        <label>
          <input type=\"radio\" name=\"option_format\"
           value=\"csv\"
           checked>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("CSV file");
        echo "
        </label>
        &nbsp;
        <label>
          <input type=\"radio\" name=\"option_format\"
           value=\"xlsx\">";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Excel file");
        echo "
        </label>
      </td>
    </tr>
    <tr class=\"mailpoet_export_process\">
      <th scope=\"row\">
        <a href=\"javascript:;\"
         class=\"button-primary button-disabled wysija mailpoet_export_process\">";
        // line 82
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export");
        echo "</a>
      </th>
    </tr>
    </tbody>
  </table>
</script>
</div>

";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("importExport.css");
        echo "

<script type=\"text/javascript\">
  var
    segments = ";
        // line 94
        echo ($context["segments"] ?? null);
        echo ",
    subscriberFieldsSelect2 =
      ";
        // line 96
        echo ($context["subscriberFieldsSelect2"] ?? null);
        echo ",
    exportData = {
     segments: segments.length || null
    };
</script>
";
    }

    // line 103
    public function block_translations($context, array $blocks = array())
    {
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("serverError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Server error:"), "exportMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s subscribers were exported. Get the exported file [link]here[/link].")));
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "subscribers/importExport/export.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 107,  187 => 104,  184 => 103,  174 => 96,  169 => 94,  162 => 90,  151 => 82,  141 => 75,  133 => 70,  124 => 64,  112 => 55,  103 => 49,  96 => 44,  94 => 41,  89 => 39,  79 => 32,  72 => 28,  56 => 14,  50 => 11,  47 => 10,  45 => 9,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subscribers/importExport/export.html", "/home/rentipv4/wp-content/plugins/mailpoet/views/subscribers/importExport/export.html");
    }
}
