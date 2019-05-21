<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_123c1368c230210e9985dd9a7cb56acb8c41c91aa0e185e1efe75a869175a3c2 extends Twig_Template
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
        $__internal_bdca4b1457dd1550c684290ff8c3bd65351eade9067ad35a232b315490ad63ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdca4b1457dd1550c684290ff8c3bd65351eade9067ad35a232b315490ad63ab->enter($__internal_bdca4b1457dd1550c684290ff8c3bd65351eade9067ad35a232b315490ad63ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_716b8001e38bf541036c33d5e43e0e7788b959b42a2a705f059a69abc223d2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716b8001e38bf541036c33d5e43e0e7788b959b42a2a705f059a69abc223d2f7->enter($__internal_716b8001e38bf541036c33d5e43e0e7788b959b42a2a705f059a69abc223d2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bdca4b1457dd1550c684290ff8c3bd65351eade9067ad35a232b315490ad63ab->leave($__internal_bdca4b1457dd1550c684290ff8c3bd65351eade9067ad35a232b315490ad63ab_prof);

        
        $__internal_716b8001e38bf541036c33d5e43e0e7788b959b42a2a705f059a69abc223d2f7->leave($__internal_716b8001e38bf541036c33d5e43e0e7788b959b42a2a705f059a69abc223d2f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
