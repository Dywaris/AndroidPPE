<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_db96a8f091279c025410fc40de6a9ebe10f0cab5df6dd010de7682ede22fae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e29d87bad276e40b158bacc8e8bf45991806ccb6efc4254977658105d2059f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29d87bad276e40b158bacc8e8bf45991806ccb6efc4254977658105d2059f37->enter($__internal_e29d87bad276e40b158bacc8e8bf45991806ccb6efc4254977658105d2059f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7f5f78c1d989500b3a614e8c6e3e2b6e45197f854d15ef3fd9413716e69abd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5f78c1d989500b3a614e8c6e3e2b6e45197f854d15ef3fd9413716e69abd31->enter($__internal_7f5f78c1d989500b3a614e8c6e3e2b6e45197f854d15ef3fd9413716e69abd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e29d87bad276e40b158bacc8e8bf45991806ccb6efc4254977658105d2059f37->leave($__internal_e29d87bad276e40b158bacc8e8bf45991806ccb6efc4254977658105d2059f37_prof);

        
        $__internal_7f5f78c1d989500b3a614e8c6e3e2b6e45197f854d15ef3fd9413716e69abd31->leave($__internal_7f5f78c1d989500b3a614e8c6e3e2b6e45197f854d15ef3fd9413716e69abd31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
