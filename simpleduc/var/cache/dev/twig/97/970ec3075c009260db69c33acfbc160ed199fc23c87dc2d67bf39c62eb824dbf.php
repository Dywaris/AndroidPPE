<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b38b3cb074ae6432c33b2a338e4e4ec6a9a098906f5c1a4a4c8416a75dc568cb extends Twig_Template
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
        $__internal_22163225bb800c450cd7d51bd2da99bb1dff089e8a4e0cb481bc1ef568094c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22163225bb800c450cd7d51bd2da99bb1dff089e8a4e0cb481bc1ef568094c12->enter($__internal_22163225bb800c450cd7d51bd2da99bb1dff089e8a4e0cb481bc1ef568094c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d0e5471a97b8a460db008132160b7a16924817f61721598dd0b4884a4f290a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e5471a97b8a460db008132160b7a16924817f61721598dd0b4884a4f290a53->enter($__internal_d0e5471a97b8a460db008132160b7a16924817f61721598dd0b4884a4f290a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_22163225bb800c450cd7d51bd2da99bb1dff089e8a4e0cb481bc1ef568094c12->leave($__internal_22163225bb800c450cd7d51bd2da99bb1dff089e8a4e0cb481bc1ef568094c12_prof);

        
        $__internal_d0e5471a97b8a460db008132160b7a16924817f61721598dd0b4884a4f290a53->leave($__internal_d0e5471a97b8a460db008132160b7a16924817f61721598dd0b4884a4f290a53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
