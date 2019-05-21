<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_21984f4a8951b17bfd332ebd59ed066e1af0d89e2d7acf65441fd3cb190371ae extends Twig_Template
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
        $__internal_3787a6f3711f3f38cf5abc45f45da046a806d4dc9fa17786cbc343d87ea0722f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787a6f3711f3f38cf5abc45f45da046a806d4dc9fa17786cbc343d87ea0722f->enter($__internal_3787a6f3711f3f38cf5abc45f45da046a806d4dc9fa17786cbc343d87ea0722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2bd12a1a33e476ec2212296df513928d06ec4ab9c8b9323b413bec2738551111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd12a1a33e476ec2212296df513928d06ec4ab9c8b9323b413bec2738551111->enter($__internal_2bd12a1a33e476ec2212296df513928d06ec4ab9c8b9323b413bec2738551111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3787a6f3711f3f38cf5abc45f45da046a806d4dc9fa17786cbc343d87ea0722f->leave($__internal_3787a6f3711f3f38cf5abc45f45da046a806d4dc9fa17786cbc343d87ea0722f_prof);

        
        $__internal_2bd12a1a33e476ec2212296df513928d06ec4ab9c8b9323b413bec2738551111->leave($__internal_2bd12a1a33e476ec2212296df513928d06ec4ab9c8b9323b413bec2738551111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
