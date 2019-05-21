<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d4032952a98515490480f044e958b5ed16073611be1457542c56e0bd887a924 extends Twig_Template
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
        $__internal_9b20e199213f0d57820e6600ec200633fde1d31d37305bbf1a6db37e8e31e5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b20e199213f0d57820e6600ec200633fde1d31d37305bbf1a6db37e8e31e5c5->enter($__internal_9b20e199213f0d57820e6600ec200633fde1d31d37305bbf1a6db37e8e31e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fe9e58e11179049fe9b341b1999cd7352ccfb4bbd47ee802930e400b153dda94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9e58e11179049fe9b341b1999cd7352ccfb4bbd47ee802930e400b153dda94->enter($__internal_fe9e58e11179049fe9b341b1999cd7352ccfb4bbd47ee802930e400b153dda94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9b20e199213f0d57820e6600ec200633fde1d31d37305bbf1a6db37e8e31e5c5->leave($__internal_9b20e199213f0d57820e6600ec200633fde1d31d37305bbf1a6db37e8e31e5c5_prof);

        
        $__internal_fe9e58e11179049fe9b341b1999cd7352ccfb4bbd47ee802930e400b153dda94->leave($__internal_fe9e58e11179049fe9b341b1999cd7352ccfb4bbd47ee802930e400b153dda94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
