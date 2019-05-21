<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6ae02bcd67415f50eba71211ad7691c8f60cb3edb55f5e49f93c3aca598661ad extends Twig_Template
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
        $__internal_9b1c46ebc338052f3ca7f394493370019f34cb73179e606d0656c8c1cdb7b113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1c46ebc338052f3ca7f394493370019f34cb73179e606d0656c8c1cdb7b113->enter($__internal_9b1c46ebc338052f3ca7f394493370019f34cb73179e606d0656c8c1cdb7b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_689f1a220c2059bc1aa383d5176d3d3af90d60c9d96730338f924e392972f627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689f1a220c2059bc1aa383d5176d3d3af90d60c9d96730338f924e392972f627->enter($__internal_689f1a220c2059bc1aa383d5176d3d3af90d60c9d96730338f924e392972f627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9b1c46ebc338052f3ca7f394493370019f34cb73179e606d0656c8c1cdb7b113->leave($__internal_9b1c46ebc338052f3ca7f394493370019f34cb73179e606d0656c8c1cdb7b113_prof);

        
        $__internal_689f1a220c2059bc1aa383d5176d3d3af90d60c9d96730338f924e392972f627->leave($__internal_689f1a220c2059bc1aa383d5176d3d3af90d60c9d96730338f924e392972f627_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
