<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2446647a07a9cf480662901eb43f919267b53491ae50eb7e9f9775f9ff4adcad extends Twig_Template
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
        $__internal_83dbd16855ad04ae257d85ccded125c248c6dba218d0c68aa37dafa7555688cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dbd16855ad04ae257d85ccded125c248c6dba218d0c68aa37dafa7555688cc->enter($__internal_83dbd16855ad04ae257d85ccded125c248c6dba218d0c68aa37dafa7555688cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5ad805d94c4f7f818846d87eb9e7490443071b719abad1af1c779a361d7bf068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad805d94c4f7f818846d87eb9e7490443071b719abad1af1c779a361d7bf068->enter($__internal_5ad805d94c4f7f818846d87eb9e7490443071b719abad1af1c779a361d7bf068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_83dbd16855ad04ae257d85ccded125c248c6dba218d0c68aa37dafa7555688cc->leave($__internal_83dbd16855ad04ae257d85ccded125c248c6dba218d0c68aa37dafa7555688cc_prof);

        
        $__internal_5ad805d94c4f7f818846d87eb9e7490443071b719abad1af1c779a361d7bf068->leave($__internal_5ad805d94c4f7f818846d87eb9e7490443071b719abad1af1c779a361d7bf068_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
